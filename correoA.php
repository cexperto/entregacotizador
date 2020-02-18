<?php
class SendMail{
    public static function SendMail($to,$subject,$content){
        $key ='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';
        $subject="correito";
        $email = new \SendGrid\Mail\Mail();
        $email->setForm("sipuedeshazloya@gmail.com","Andres Ayala");
        $email->setSubject($subject);
        $email->addTo("text/plain",$content);

        $sendgrid = new \SendGrid($key);
        try{
            $response = $sendgrid->send($email);
            return $response;
        }catch(Exception $e){
            echo 'Email exception caught :'.$e->getMessage() ."\n";
            return false;
        }
    }
}
