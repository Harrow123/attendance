<?php

    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("kenroy.harrow@jcf.gov.jm", "Kenroy Harrow");
            $email->setSubject($subject);
            $email->addTo($to);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            } catch(Exception $e) {
                echo 'Email exception caught: '. $e->get.message() ."\n";
                return false;
            }
        }
    }

?>