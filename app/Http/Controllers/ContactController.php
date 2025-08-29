<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        // Simpan ke database
        Contact::create($request->only('name','email','message'));

        // Kirim email via PHPMailer
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'anisay106@gmail.com'; // ganti email
            $mail->Password = 'ftzxjjmduojjdpli';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($request->email, $request->name);
            $mail->addAddress('anisay106@gmail.com','Admin Sekolah');

            $mail->isHTML(true);
            $mail->Subject = 'Pesan dari Website Sekolah';
            $mail->Body = "Nama: {$request->name}<br>Email: {$request->email}<br>Pesan: {$request->message}";

            $mail->send();
            return back()->with('success','Pesan berhasil dikirim!');
        } catch(Exception $e){
            return back()->with('error','Pesan gagal dikirim. Error: '.$mail->ErrorInfo);
        }
    }
}
