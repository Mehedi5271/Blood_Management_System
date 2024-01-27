<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class DonorController extends Controller
{
    public function donor(){
        $profiles = Profile::all();
        return view ('admin.view-donor',compact('profiles'));
    }

    public function mail($id){

        $user = User::find($id);


        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'amarullapara@gmail.com';                     //SMTP username
            $mail->Password   = 'rwqujdmbyofjmpyw';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('amarullapara@gmail.com', 'Blood Tracker Officia');
            $mail->addAddress( $user->email,$user->name);     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Blood Tracker: New Donor Create';
            $mail->Body    = "Hi sir " . "<br>

            
           You are now official blood donor in our website.<br>";


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        
        return redirect()->back()->with('success', 'Email sent successfully.');
    }


   

   
}
