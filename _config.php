<?php

// Register as default mailer
Injector::inst()->registerService(new SmtpMailer(), 'Mailer');
