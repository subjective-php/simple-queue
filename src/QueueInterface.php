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
     * @throws Exception\DeleteException Thrown if the queue was unble to delete the message.
     */
    public function deleteMessage(MessageInterface $message);

    /**
     * Delivers a message to the queue.
     *
     * @param MessageInterface $message The message to send.
     * @param array            $options Options for sending the message.
     *
     * @return void
     *
     * @throws Exception\SendException Thrown if the queue was unable to send the message.
     */
    public function sendMessage(MessageInterface $message, array $options);

    /**
     * Retrieves 0 or more messages from the specified.
     *
     * @param array $options Options for receiving the messages.
     *
     * @return MessageInterface[]
     *
     * @throws Exception\ReceiveException Thrown if the queue is unable to determine if messages can be received.
     */
    public function receiveMessages(array $options) : array;
}
