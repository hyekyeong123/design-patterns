<?php
/**
 * 외부로 부터 알고리즘을 전달 받습니다.
 */
class Factory extends Builder
{
    /**
     * 알고리즘 의존성을 주입 받습니다.
     * 의존성을 전달받은 전략 패턴은 내부 프로퍼티에 저장되며 외부로 공개된 메서드를 통해 실행
     */    
    public function __construct($algorism=null)
    {
        echo  __CLASS__ ."객체를 생성하였습니다.\n";
        if ($algorism) {
            $this->algorism = $algorism;
        }
    }

    /**
     * 단계별 빌더의 메소드를 호출합니다.
     */
    public function build()
    {
        echo "=== 빌드합니다. ===\n";
        $this->algorism->setCpu("i7");
        $this->algorism->setRam([8,8]);
        $this->algorism->setStorage([256,512]);

        return $this;
    }
}
