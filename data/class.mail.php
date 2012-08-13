<?php
 class Mail { public $from; public $fromName; public $to; public $cc; public $bcc; public $subject; public $body; public $replyTo; public $replyToName; public $html = false; public $oneMailToEach = false; public function send() { $replyToString = ""; if (isset($this->replyTo)) $replyToString = isset($this->replyToName)? sprintf('%s <%s>', $this->replyToName, $this->replyTo) : $this->replyTo; if (strlen($replyToString) > 0) $replyToString = "Reply-To: $replyToString\r\n"; $fromString = ""; if (isset($this->from)) $fromString = isset($this->fromName)? sprintf('%s <%s>', $this->fromName, $this->from) : $this->from; if (strlen($fromString) > 0) $fromString = "From: $fromString\r\n"; $ccString = ""; if (isset($this->cc)) $ccString = is_array($this->cc)? implode(",", $this->cc) : $this->cc; if (strlen($ccString) > 0) $ccString = "CC: $ccString\r\n"; $bccString = ""; if (isset($this->bcc)) $bccString = is_array($this->bcc)? implode(",", $this->bcc) : $this->bcc; if (strlen($bccString) > 0) $bccString = "BCC: $bccString\r\n"; $headers = $fromString . $ccString . $bccString . $replyToString; if ($this->html) $headers .= "MIME-Version: 1.0\r\nContent-Type: text/html;charset=iso-8859-1"; $success = true; if ($this->oneMailToEach) { if (is_array($this->to)) { foreach ($this->to as $to) $success = $success && mail($to, $this->subject, $this->body, $headers); } else $success = $success && mail($this->to, $this->subject, $this->body, $headers); } else { $toString = is_array($this->to)? implode(",", $this->to) : $this->to; $success = $success && mail($toString, $this->subject, $this->body, $headers); } return $success; } } ?>