<?php
include '../dbconnect/dbconnect.php';

# 테이블 생성
// $query = "
//   create table user (
//     num int(5) not null auto_increment,
//     id char(10) not null,
//     name varchar(20) not null,
//     birth int not null,
//     address char(2) not null,
//     tel char(11),
//     date date,
//     primary key(num)
//   ) engine=innodb;
// ";
// $result = mysqli_query($dbcon, $query);

// if ($result) {
//   echo "table 생성 성공";
// } else {
//   echo "table 생성 실패<br>실패 원인 : ".mysqli_error($dbcon);
// }


# 데이터 넣기
// $query = "
//   insert into 
//   user 
//   (id, name, birth, address, tel, date) 
//   values 
//   ('lsg', '이승기', '1987', '서울', '01011111111', '2008-08-08'),
//   ('kbs', '김범수', '1979', '경남', '01022222222', '2012-04-04'),
//   ('kkh', '김경호', '1971', '전남', '01033333333', '2007-07-07'),
//   ('jyp', '조용필', '1950', '경기', '01044444444', '2009-02-08'),
//   ('ssk', '성시경', '1979', '서울', '01055555555', '2005-05-05'),
//   ('ljb', '임재범', '1963', '서울', '01066666666', '2014-03-03'),
//   ('yjs', '윤종신', '1969', '경남', '01077777777', '2020-01-31'),
//   ('ejw', '은지원', '1972', '경북', '01088888888', '2019-12-01'),
//   ('jkw', '조관우', '1965', '경기', '01099999999', '2019-12-01'),
//   ('bbk', '바비킴', '1973', '서울', '01012341234', '2019-12-01')
// ";
// $result = mysqli_query($dbcon, $query);

// if ($result) {
//   echo "data 생성 성공";
// } else {
//   echo "data 생성 실패<br>실패 원인 : ".mysqli_error($dbcon);
// }




include '../dbconnect/dbclose';
?>