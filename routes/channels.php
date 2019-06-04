<?php
Broadcast::channel('App.User.{id}', function ($spb66d5f, $spf46c5d) { return (int) $spb66d5f->id === (int) $spf46c5d; });