<?php

function msgHandler($ig, $thread){
	// Media
	if ($thread->items{0}->item_type == 'media_share') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Todavía no estoy capacitado para entender lo que me acabas de enviar."
		);
	// Story
	} elseif ($thread->items{0}->item_type == 'story_share') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Todavía no estoy capacitado para entender lo que me acabas de enviar."
		);
	// Profile
	} elseif ($thread->items{0}->item_type == 'profile') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Todavía no estoy capacitado para entender lo que me acabas de enviar."
		);
	// Hidden (private user media or story)
	} elseif ($thread->items{0}->item_type == 'placeholder') {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Todavía no estoy capacitado para entender lo que me acabas de enviar."
		);
	} else {
		$ig->direct->sendText(array(
			'thread' => $thread->thread_id),
			"Todavía no estoy capacitado para entender lo que me acabas de enviar."
		);
	}
}

?>
