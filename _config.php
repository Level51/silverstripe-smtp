<?php

// Register as default mailer when not on dev
if (!defined('USE_DEFAULT_MAILER') || (defined('USE_DEFAULT_MAILER') && USE_DEFAULT_MAILER !== true))
    Injector::inst()->registerService(new SmtpMailer(), 'Mailer');
