<?php 
    class Person {
        public $name;

        function getName() {
            echo $this->name;
        }

        public function  __construct (){
            echo "构造方法执行了";
        }

        public function __destruct () {
            echo "析构方法执行了";
        }
    }

    $per = new Person;
    $per->name = "zhangsan";
    $per->getName();
