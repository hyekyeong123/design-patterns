<?php

/**
 * 분리한 알고리즘 객체는 다시 빌더에 전달되어 복합 객체를 생성합니다.
 */
abstract class Builder 
{
    /**
     * 알고리즘 인스턴스를 저장합니다.
     */
    protected $algorism;

    /**
     * 알고리즘 선택
     */
    public function setAlgorism(Algorism $algorism)
    {
        // 빌드할 객체의 알고리즘 인스턴스를 저장합니다.
        echo "빌드 인스턴스를 저장합니다 <= ". get_class($algorism). "\n";
        $this->algorism = $algorism;

        return $this;
    }

    // 알고리즘 인스턴스
    public function getInstance(){
        return $this->algorism->getInstance();
    }

    // 추상 메소드 선언
    abstract public function build();

}