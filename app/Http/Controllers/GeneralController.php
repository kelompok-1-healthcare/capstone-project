<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class GeneralController extends Controller
{
    // View Controller
    public function landing_page()
    {
        return view('landingpage');
    }

    public function register_page()
    {
        return view('register');
    }

    public function login_page()
    {
        return view('login');
    }

    public function home_page()
    {
        return view('homepage');
    }

    public function artikel_page()
    {
        return view('artikel');
    }

    public function klasifikasi_page()
    {
        return view('homeKlasifikasi');
    }

    public function formKlasifikasi_page()
    {
        return view('formKlasifikasi');
    }

    public function hasilKlasifikasi_page()
    {
        return view('hasilKlasifikasi');
    }

    public function formKualitasTidur_page()
    {
        return view('formKualitasTidur');
    }

    public function formTingkatStres_page()
    {
        return view('formTingkatStres');
    }


    // Backend Controller
    public function register_process(Request $request)
    {
        $u = new User();
        try {
            $dt = $u->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ]);

            $dt['password'] = bcrypt($dt['password']);

            $emailIsExist = $u->where('email', $dt['email'])->count();
            if ($emailIsExist > 0) {
                return redirect('/register')->with('error', 'Email already registered');
            }

            $count = $u->count();
            $user_id = 'SOMNO-' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);

            $dt['user_id'] = $user_id;

            $user = $u->create($dt);

            return redirect()->back()->with('success', 'Register Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function login_process(Request $request)
    {
        $u = new User();
        try {
            $dt = $u->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $user = $u->where('email', $dt['email'])->first();
            if (!$user) {
                return redirect('/login')->with('error', 'Email not registered');
            }

            if (!password_verify($dt['password'], $user->password)) {
                return redirect('/login')->with('error', 'Password not match');
            }

            session(['user' => $user]);

            return redirect('/home');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function logout_process()
    {
        session()->forget('user');
        return redirect('/login');
    }

    public function hitung_BMI($berat_badan, $tinggi_badan)
    {
        // Konversi tinggi badan ke meter
        $tinggi_badan_meter = $tinggi_badan / 100;

        // Hitung BMI
        $bmi = $berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);

        if ($bmi < 18.5) {
            return "Underweight";
        } else if ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal weight";
        } else if ($bmi >= 25 && $bmi <= 29.9) {
            return "Overweight";
        } else if ($bmi >= 30) {
            return "Obesity";
        }
    }

    public function calculate_quality_of_sleep($answers)
    {
        if (count($answers) <= 7) {
            return "Please fill all fields";
        }

        $isValid = true;
        $fields = ['quality', 'sleep_time', 'sleep_duration', 'sleep_disturbance', 'bed_time_ratio', 'sleep_medication', 'daytime_sleepiness'];
        foreach ($fields as $field) {
            if (!isset($answers[$field])) {
                $isValid = false;
                break;
            }
        }

        if (!$isValid) {
            return "Please fill all fields";
        }

        $score = ($answers['quality'] + $answers['sleep_time'] + $answers['sleep_duration'] + $answers['sleep_disturbance'] + $answers['bed_time_ratio'] + $answers['sleep_medication'] + $answers['daytime_sleepiness']) / 7;

        session(['quality_of_sleep' => round($score, 1)]);
    }

    public function calculate_stress_level($answers)
    {
        if (count($answers) <= 7) {
            return "Please fill all fields";
        }

        $isValid = true;
        $fields = ['physical_health_stress', 'mental_health_stress', 'workload_stress', 'social_relationship_stress', 'financial_stress', 'sleep_quality_stress', 'work_life_balance_stress'];
        foreach ($fields as $field) {
            if (!isset($answers[$field])) {
                $isValid = false;
                break;
            }
        }

        if (!$isValid) {
            return "Please fill all fields";
        }

        $score = ($answers['physical_health_stress'] + $answers['mental_health_stress'] + $answers['workload_stress'] + $answers['social_relationship_stress'] + $answers['financial_stress'] + $answers['sleep_quality_stress'] + $answers['work_life_balance_stress']) / 7;

        session(['stress_level' => round($score, 1)]);
    }

    public function kualitas_tidur_process(Request $request)
    {
        $answers = $request->all();

        $fields = ['quality', 'sleep_time', 'sleep_duration', 'sleep_disturbance', 'bed_time_ratio', 'sleep_medication', 'daytime_sleepiness'];
        foreach ($fields as $field) {
            if (!isset($answers[$field])) {
                return redirect('/form-kualitas-tidur')->with('error', 'Please fill all fields');
            }
        }

        $user = session('user');
        $user->score_sleep_quality = session('quality_of_sleep');
        $user->save();
        session(['user' => $user]);

        return redirect('/form-tingkat-stres')->with('success', 'Kualitas tidur berhasil dihitung', 'score', $this->calculate_quality_of_sleep($answers));
    }

    public function tingkat_stres_process(Request $request)
    {
        $answers = $request->all();

        $fields = ['physical_health_stress', 'mental_health_stress', 'workload_stress', 'social_relationship_stress', 'financial_stress', 'sleep_quality_stress', 'work_life_balance_stress'];
        foreach ($fields as $field) {
            if (!isset($answers[$field])) {
                return redirect('/form-tingkat-stres')->with('error', 'Please fill all fields');
            }
        }

        $this->calculate_stress_level($answers);

        $user = session('user');
        $user->score_stress_quality = session('stress_level');
        $user->save();
        session(['user' => $user]);

        return redirect('/form-klasifikasi-gangguan-tidur')->with('success', 'Tingkat stres berhasil dihitung', 'score', $this->calculate_stress_level($answers));
    }

    public function klasifikasi_gangguan_tidur_process(Request $request)
    {
        $answers = $request->all();

        echo "<pre>";
        print_r($answers);
        echo "</pre>";

        $fields = [
            'gender', 'age', 'occupation', 'height', 'weight', 'systolic', 'diastolic', 'heartRate', 'dailySteps', 'physicalActivity', 'durationOfSleep'
        ];

        foreach ($fields as $field) {
            if (!isset($answers[$field])) {
                return redirect('/form-klasifikasi-gangguan-tidur')->with('error', 'Please fill all fields');
            }
        }

        $bmi = $this->hitung_BMI($answers['weight'], $answers['height']);

        $gender = $answers['gender'] == "Male" ? 0 : 1;

        $occupation = 0;
        switch ($answers['occupation']) {
            case 'Software Engineer':
                $occupation = 9;
                break;
            case 'Dokter':
                $occupation = 1;
                break;
            case 'Sales':
                $occupation = 6;
                break;
            case 'Guru':
                $occupation = 10;
                break;
            case 'Perawat':
                $occupation = 5;
                break;
            case 'Engineer':
                $occupation = 2;
                break;
            case 'Akuntan':
                $occupation = 0;
                break;
            case 'Scientist':
                $occupation = 8;
                break;
            case 'Pengacara':
                $occupation = 3;
                break;
            case 'Salesperson':
                $occupation = 7;
                break;
            case 'Manager':
                $occupation = 4;
                break;
        }

        switch ($bmi) {
            case 'Underweight':
                $bmi = 0;
                break;
            case 'Normal weight':
                $bmi = 1;
                break;
            case 'Overweight':
                $bmi = 2;
                break;
            case 'Obesity':
                $bmi = 3;
                break;
        }



        $url = env('API_FLASK_URL') . '/predict';
        $data = [
            'features' => [
                $gender,
                $answers['age'],
                $occupation,
                $answers['durationOfSleep'],
                session('quality_of_sleep'),
                $answers['physicalActivity'],
                // session('stress_level'),
                $bmi,
                $answers['heartRate'],
                $answers['dailySteps'],
                $answers['systolic'],
                $answers['diastolic'],
            ]
        ];

        foreach ($data['features'] as $key => $value) {
            $data['features'][$key] = (float) $value;
        }

        $response = Http::timeout(60)->post($url, $data);

        $result = $response->json();

        return redirect('/hasil-klasifikasi-gangguan-tidur')->with('result', $result);
    }
}
