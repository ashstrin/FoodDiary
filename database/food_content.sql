/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ashleystringer
 * Created: Mar 23, 2018
 */

CREATE DATABASE IF NOT EXISTS FoodContentDB DEFAULT charset='utf8';
USE FoodContentDB;

CREATE TABLE IF NOT EXISTS food_log(
"id" INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
"content" VARCHAR(500) NOT NULL,
"date" DATE NOT NULL,
"name" VARCHAR(20) NOT NULL
)ENGNE=InnoDB DEFAULT CHARSET=latin1;