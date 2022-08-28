<?php
include '../include/dbconnect.php';

$result = mysqli_query($dbcon, $query);
if ($result === false) {
  echo mysqli_error($dbcon);
};
?>



<!-- 소문자로 통일 -->
<!-- 
  <INSERT>
  1. 테이블에 데이터를 삽입
  2. 문법
    - INSERT INTO table_name
        VALUES (value1, value2, value3, ...);

    - INSERT INTO table_name (column1, column2, column3, ...)
        VALUES (value1, value2, value3, ...);

    - INSERT INTO table_name (column1, column2, column3, ...)
        SELECT 테이블에 들어갈 값
        FROM select값을 구하기 위한 테이블
        WHERE 조건

    - UPDATE로 가능

  3. 예제
    - INSERT INTO 'student' VALUES ('2', 'leezche', '여자', '서울', 2000-10-26');
    - INSERT INTO 'student' ('id', 'name', 'sex', 'address', 'birthday') VALUES ('1', 'egoing', '남자', 'seoul', '2000-11-16');

  <CREATE TABLE>
  1. 테이블 생성
  2. 문법
    - CREATE TABLE table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      name varchar(255),
      ...

      PRIMARY KEY(id)
    ) ENGINE=INNODB;
  
  <ALTER TABLE>
  1. 테이블에 컬럼을 삽입
  2. 문법
    1) 컬럼 추가
    - ALTER TABLE 테이블명 ADD 컬럼명 타입 옵션;

    2) 컬럼 삭제
    - ALTER TABLE 테이블명 DROP 컬럼명

    3) 컬럼명 변경 및 타입 변경
    - ALTER TABLE 테이블명 CHANGE 컬럼명 변경할컬럼명 varchar(12);

    4) 테이블명 수정
    - ALTER TABLE 테이블명 RENAME 변경할테이블명

    5) 테이블 삭제
    DROP TABLE 테이블명
    
-->