<?php

namespace SubjectivePHP\SimpleQueue;

abstract class Options
{
    const MAX_NUMBER_OF_MESSAGES_KEY = 'MaxNumberOfMessages';
    const VISIBILITY_TIMEOUT_KEY = 'VisibilityTimeout';
    const WAIT_TIME_SECONDS_KEY = 'WaitTimeSeconds';
    const QUERY_KEY = 'Query';
}
