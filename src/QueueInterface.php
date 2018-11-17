<?php

namespace SubjectivePHP\SimpleQueue;

interface QueueInterface
{
    /**
     * Deletes the specified message from the specified queue.
     *
     * @param MessageInterface $message The message to delete.
     *
     * @return void
     *
     * @throws Exception\DeleteException
     */
    public function deleteMessage(MessageInterface $messages);

    /**
     * Delivers a message to the queue.
     *
     * @param MessageInterface $message The message to send.
     * @param array            $options
     *
     * @return void
     *
     * @throws Exception\SendException
     */
    public function sendMessage(MessageInterface $message, array $options);

    /**
     * Retrieves 0 or more messages from the specified.
     *
     * @param array $options
     *
     * @return MessageInterface[]
     *
     * @throws Exception\ReceiveException
     */
    public function receiveMessages(array $options) : array;
}
