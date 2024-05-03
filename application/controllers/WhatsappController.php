<?php
// WhatsappController.php

require_once 'Activity_Model.php';

class WhatsappController {
    private $activity_model;

    public function __construct() {
        $this->activity_model = new Activity_Model();
    }

    public function send_whatsapp_message($activity_id, $recipient_number) {
        // Get the activity data
        $activity = $this->activity_model->get_activity_by_id($activity_id);

        if (!$activity) {
            // Handle the case where the activity does not exist
            echo "Activity not found!";
            return;
        }

        // Construct the message
        $message = "Activity: {$activity->TypeOfActivity}\n";
        $message .= "Description: {$activity->Description}\n";
        $message .= "Start Date: {$activity->StartDate}\n";
        $message .= "Start Time: {$activity->StartTime}\n";
        $message .= "End Date: {$activity->EndDate}\n";
        $message .= "End Time: {$activity->EndTime}\n";
        $message .= "Reminder Date: {$activity->ReminderDate}\n";
        $message .= "Reminder Time: {$activity->ReminderTime}\n";
        $message .= "Repeat: {$activity->Repeat}\n";
        $message .= "Project: {$activity->Project}\n";
        $message .= "Assigned To: {$activity->AssignedTo}\n";
        $message .= "Status: {$activity->Status}\n";
        $message .= "Priority: {$activity->Priority}\n";

        // Send the message using the Twilio API or any other WhatsApp API of your choice
        $this->send_whatsapp($recipient_number, $message);

        // You can redirect to a success page or display a success message
        echo "Notification sent successfully!";
    }

    private function send_whatsapp($recipient_number, $message) {
        // Use the Twilio PHP library or the API of your choice to send the WhatsApp message
        // Replace 'your_account_sid', 'your_auth_token', and 'your_twilio_number' with your Twilio credentials
        $account_sid = 'your_account_sid';
        $auth_token = 'your_auth_token';
        $twilio_number = 'your_twilio_number';

        require_once 'twilio-php/autoload.php'; // Adjust the path as needed

        $client = new Twilio\Rest\Client($account_sid, $auth_token);

        $message = $client->messages->create(
            "whatsapp:{$recipient_number}",
            array(
                "from" => "whatsapp:{$twilio_number}",
                "body" => $message
            )
        );
    }
}

// Usage
if (isset($_POST['activity_id']) && isset($_POST['recipient_number'])) {
    $activity_id = $_POST['activity_id'];
    $recipient_number = $_POST['recipient_number'];

    $controller = new WhatsappController();
    $controller->send_whatsapp_message($activity_id, $recipient_number);
}
?>
