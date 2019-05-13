<?php

function msgHandler($ig, $dflow, $thread){
	// Media
	if ($thread->items{0}->item_type == 'media_share') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Can't understand this kind of media."
		);
	// Story
	} elseif ($thread->items{0}->item_type == 'story_share') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Can't understand this kind of media."
		);
	// Profile
	} elseif ($thread->items{0}->item_type == 'profile') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Can't understand this kind of media."
		);
	// Hidden (private user media or story)
	} elseif ($thread->items{0}->item_type == 'placeholder') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Can't understand this kind of media."
		);
	// Link
	} elseif ($thread->items{0}->item_type == 'link') {
		$response = $dflow->query($thread->thread_id, $thread->last_permanent_item->link->text);
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			$response
		);	
	} else {
		
		$response = $dflow->query($thread->thread_id, $thread->last_permanent_item->text);

		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			$response
		);
	}
}

?>
