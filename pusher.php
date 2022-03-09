<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap3',
    'useTLS' => false
  );
  $pusher = new Pusher\Pusher(
    '3ff8880bd6862f1e0d53',
    'd147994da8632b51904b',
    '961469',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>