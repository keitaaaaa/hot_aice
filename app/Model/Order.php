<?php
class Order extends AppModel {
    public $validate = array(
        'customer' => array(
            'rule' => 'notEmpty'
        ),
        'adress' => array(
            'rule' => 'notEmpty'
        ),
        'mail' => array(
            'rule' => 'notEmpty'
        ),
        'color' => array(
            'rule' => 'notEmpty'
        ),
        'volume' => array(
            'rule' => 'notEmpty'
        ),
        'size' => array(
            'rule' => 'notEmpty'
        )
    );
}