<?php
class Object implements Adapter{
    private $_adapter;

    function __construct()
    {
        // 작성한 어댑터는 기존의 Math 클래스를 상속받지 않고 객체의 생성자에서 기존 Math 클래스의 객체를 생성한다.
        // 생성자에서 새로운 객체를 생성, 포함하므로 복합 객체
        $this->_adapter = new Math;
    }

    public function twiceOf(int $num): int
    {
        echo "정수 두배를 적용합니다.";
        $_num = $this->_adapter->twoTime((float) $num);
        return (int) $_num;
    }

    public function halfOf(int $num): int
    {
        echo "정수 1/2배를 적용합니다.";
        $_num = $this->_adapter->halfTime((float) $num);
        return (int) $_num;
    }
}