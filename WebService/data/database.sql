/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Zarko
 * Created: Apr 28, 2020
 */

create database WebService;
use WebService;

	CREATE TABLE `student` (
	  `id` int(11) NOT NULL,
	  `roll_no` varchar(10) DEFAULT 'NULL',
	  `first_name` varchar(255) NOT NULL,
	  `last_name` varchar(255) NOT NULL,
	  `class` varchar(255) NOT NULL,
	  `age` int(11) NOT NULL,
	  `address` varchar(255) NOT NULL,
	  `status` int(1) NOT NULL DEFAULT 0
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	INSERT INTO `student` (`id`, `roll_no`, `first_name`, `last_name`, `class`, `age`, `address`, `status`) VALUES
	(1, 'R001', 'Tiger', 'Wood', 'LKG', 3, 'USA', 1);

	ALTER TABLE `student`
	  ADD PRIMARY KEY (`id`);

	ALTER TABLE `student`
	  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2