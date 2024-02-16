<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $session = \Config\Services::session();
        // // Check if the email sending was successful
        // if ($this->sendTestEmail()) {
        //     // Set success message as flash data
        //     $session->set('message', 'Email Sent');
        //     $session->set('toastType', 'text-bg-success');
        // } else {
        //     // Set error message as flash data
        //     $session->set('message', 'Failed to send mail');
        //     $session->set('toastType', 'text-bg-danger');
        // }

        // Redirect to the home page
        return view("Home/index");
    }

    public function sendTestEmail(): bool
    {
        try {
            $email = \Config\Services::email();
            $email->setTo("raamthecoder@gmail.com");
            $email->setSubject("Test Email");
            $email->setMessage("Hello from <b>CodeIgniter</b>");

            if ($email->send()) {
                return true;
            } else {
                log_message('error', 'Failed to send email');
                return false;
            }
        } catch (\Exception $e) {
            log_message('error', 'Exception occurred: ' . $e->getMessage());
            return false;
        }
    }
}
