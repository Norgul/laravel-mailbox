<?php

declare(strict_types=1);

namespace BeyondCode\Mailbox\Http\Requests;

use BeyondCode\Mailbox\InboundEmail;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class PostmarkRequest extends MailboxRequest
{
    public function validator()
    {
        return Validator::make($this->all(), [
            'RawEmail' => 'required',
        ]);
    }
}
