<?php

//interface is a clas with no behaviors
// acts as a contract where the participants needs to comform to the contract
interface Newsletter {
    public function subscribe($email, $name);
}

class MailChimp implements Newsletter{
    public function subscribe($email, $name) {
        // call api to add users to the email list
        die('subscribe with MailChimp');
    }
}

class Drip implements Newsletter {
    public function subscribe($email, $name) {
        // call api to add users to the email list
        die('subscribe with drip');
    }
}


class NewsletterSubscriptionController {
    public function store(Newsletter $newsletter) {
        //add user email address and name
        $newsletter->subscribe('email@email.com','John Doe');
    }
}

$controller = new NewsletterSubscriptionController();

$controller->store(new MailChimp());