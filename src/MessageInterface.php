<?php

namespace SubjectivePHP\SimpleQueue;

use DateTimeImmutable;

interface MessageInterface
{
    /**
     * Gets the unique id of the message.
     *
     * @return string
     */
    public function getId() : string;

    /**
     * Gets the topic of the message.
     *
     * @return string
     */
    public function getTopic() : string;

    /**
     * Gets the data to store in the message.
     *
     * @return array
     */
    public function getPayload() : array;

    /**
     * Gets the date/time on which the message was created.
     *
     * @return DateTimeImmutable
     */
    public function getCreated() : DateTimeImmutable;

    /**
     * Gets the priority for order for the message.
     *
     * @return float
     */
    public function getPriority() : float;

    /**
     * Create a clone of this result with the unique id of the message.
     *
     * @param string $id The unique id of the message.
     *
     * @return MessageInterface
     */
    public function withId(string $id) : MessageInterface;

    /**
     * Create a clone of this result with the given topic of the message.
     *
     * @param string $topic The topic of the message.
     *
     * @return MessageInterface
     */
    public function withTopic(string $topic) : MessageInterface;

    /**
     * Create a clone of this result with the data to store in the message.
     *
     * @param array $payload The data to store in the message.
     *
     * @return MessageInterface
     */
    public function withPayload(array $payload) : MessageInterface;

    /**
     * Create a clone of this result with the date/time on which the message was created.
     *
     * @param DateTimeImmutable $created The date/time on which the message was created.
     *
     * @return MessageInterface
     */
    public function withCreated(DateTimeImmutable $created) : MessageInterface;

    /**
     * Create a clone of this result with the priority for order for the message.
     *
     * @param float $priority The priority for order for the message.
     *
     * @return MessageInterface
     */
    public function withPriority(float $priority) : MessageInterface;
}
