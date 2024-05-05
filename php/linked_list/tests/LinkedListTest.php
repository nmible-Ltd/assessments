<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class LinkedListTest extends TestCase
{
    public function testCanCreateList(): void
    {
        $list = new LinkedList();
        $head = new Node("First");
        $list->setPrimaryNode($head);
        $second = new Node("Second");
        $third = new Node("Third");
        $list->add($second);
        $list->add($third);
        $this->assertSame(["First", "Second", "Third"], $list->traverse);
    }
}
