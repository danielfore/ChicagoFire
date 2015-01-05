<?php

$errors         = array();
$data 			= array();

// validate the variables ======================================================
	if (empty($_POST['name']))
		$errors['name'] = 'Organization name is required.';

	if (empty($_POST['email']))
		$errors['email'] = 'Email address is required.';

	// response if there are errors
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors, return a message
		$data['success'] = true;
		$data['message'] = "Your Request Has Been Submitted!";

        $ToEmail = 'community@chicagofire.com';
        $EmailSubject = "Community Request from ".$_POST["name"]."";
        $mailheader = "From: noreply@chicagofire.com\r\n";
        $mailheader .= "Reply-To: noreply@chicagofire.com\r\n";
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $MESSAGE_BODY= "
            <html>
            <head>
                <style>
                p {
                    text-align: left;
                    max-width: 40em;
                    margin: 1em auto;
                    line-height: 1.5;
                }
                </style>
            </head>
            <body>
                <p>
                Event Name: ".$_POST["event_name"]."<br>
                Event Type: ".$_POST["event_type"]."<br>
                Event Date: ".$_POST["event_date"]."<br>
                From ".$_POST["event_time_start"]." until ".$_POST["event_time_end"]."<br>
                </p>
                <p>
                Organization Name: ".$_POST["name"]."<br>
                Organization Address: ".$_POST["org_address"]."<br>
                Organization City: ".$_POST["org_city"]."<br>
                Organization Website: <a href=".$_POST["org_website"].">".$_POST["org_website"]."</a><br>                            
                </p>
                <p>
                Taxpayer ID: ".$_POST["org_id"]."<br>
                ContactName: ".$_POST["contact_name"]."<br>
                Email: ".$_POST["email"]."<br>
                Contact Number: ".$_POST["contact_number"]."<br>
                </p>
                <p>
                Deadline: ".$_POST["donation_deadline"]."<br>
                Donation Type: ".$_POST["donation_type"]."<br>
                Comment: ".nl2br($_POST["comment"])."
                </p>
            </body>
            </html>
        ";
        
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
	}

	echo json_encode($data);
