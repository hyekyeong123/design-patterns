<?php
// 인터페이스 변경을 담당하는 클래스를 플러그블 어댑터라고 한다.
interface Adapter{
    public function twiceOf(int $num) : int;
    public function halfOf(int $num) : int;
}