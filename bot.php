<?php

include 'core/config.php';
include 'core/functions.php';



while (true) {
	try {
	    $ig->login($username, $password);
			$pending_inbox = $ig->direct->getPendingInbox();
			$inbox = $ig->direct->getInbox();
			sleep(1);
			// iterate 2nd inbox
			$pending_inbox = json_decode($pending_inbox);
			foreach ($pending_inbox->inbox->threads as $thread){
				msgHandler($ig, $dflow, $thread);
			}
			// iterate inbox
			$inbox = json_decode($inbox);
			foreach ($inbox->inbox->threads as $thread){
				// check if the last msg is from our userid
				if ($thread->items{0}->user_id != '6361282126'){
					// handle msg and send response from DialogFlow
					msgHandler($ig, $dflow, $thread);
					//$ig->direct->sendText(array('thread' => $thread->thread_id), 'We are on maintenance :)');
				}
			}
	} catch (\Exception $e) {
	    echo 'Something went wrong: '.$e->getMessage().'\n';
	}
}

?>
