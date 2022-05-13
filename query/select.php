<?php
include './include/dbconnect.php';


$query = "SELECT * FROM topic WHERE id = 14";
$result = mysqli_query($dbcon, $query);

# php에서 데이터를 활용하기 위해선 php 데이터 타입으로 전환하는 과정을 거쳐야 하는데 그 때 쓰는 api
$row = (mysqli_fetch_array($result));
print_r($row);
echo $row[0]; # index를 통해 가져오는 걸 > 배열
echo $row['description']; # 컬럼명으로 가져오는 걸 > 연관배열
# 첫번째행의 값이 2번씩 반복
// [그값의 자릿수] = [값]
// [컬럼명] = [값]

# 컬럼명을 통해서 가져올 때
# mysqli_fetch_assoc();

# index를 통해서 가져올 때
# mysqli_fetch_row();

echo "<hr />";

// single row
echo "<h1>single row</h1>";

echo "<h2>{$row['title']}</h2>";
echo $row['description'];

echo "<hr />";

// multi row
echo "<h1>multi row</h1>";

$query = "SELECT * FROM topic";
$result = mysqli_query($dbcon, $query);

# ---- 비효율적. 데이터가 삭제되면 로직이 수정되야함
// $row = mysqli_fetch_array($result);
// echo "<h2>{$row['title']}</h2>";
// echo $row['description'];

// $row = mysqli_fetch_array($result);
// echo "<h2>{$row['title']}</h2>";
// echo $row['description'];

// $row = mysqli_fetch_array($result);
// echo "<h2>{$row['title']}</h2>";
// echo $row['description'];

// $row = mysqli_fetch_array($result);
// echo "<h2>{$row['title']}</h2>";
// echo $row['description'];

# 더 이상 반환할 행이 없으면 NULL
// $row = mysqli_fetch_array($result);
// var_dump($row);

# ---- 값이 있을 때 True를 반환하다 값이 없을 때 Null(==false)을 반환하여 반복문이 멈춘다.
while ($row = mysqli_fetch_array($result)) {
echo "<h2>{$row['title']}</h2>";
echo $row['description'];
}

echo "<hr />";

# 결과 값의 갯수
var_dump($result->num_rows);
?>

<!-- 
  <SELECT>
  1. 테이블에서 데이터를 조회
  2. 문법
    - SELECT 칼럼명1, 칼럼명2
      FROM 테이블명
      GROUP BY 칼럼명
      ORDER BY 칼럼명 ASC or DESC
      LIMIT offset, 조회 할 행의 수

  <GROUP BY>
  1. 특정 칼럼을 기준으로 데이터를 그룹핑함
  2. 문법
    - SELECT * FROM 테이블명 GROUP BY 그룹핑 할 기준 칼럼명
  
  3. 예제
    - SELECT sex FROM student GROUP BY sex;
    - SELECT sex,sum(distance), avg(distance) FROM student GROUP BY sex;

  <ORDER>
  1. 지정된 칼럼을 기준으로 행을 정렬
  2. 문법
    - SELECT * FROM 테이블명 ORDER BY 정렬의 기준으로 사용할 열 [DESC | ASC]
  
  3. 예제
    - SELECT * FROM student ORDER BY distance desc;
    - SELECT * FROM student ORDER BY distance desc, address asc;
      * distance를 기준으로 내림차순 정렬 후 같은 값은 address에서 오름차순 정렬\
  
  <INDEX>
  1. 색인, 조회할 때 원하는 행을 빠르게 찾을 수 있게 준비해둔 데이터
    - 자주 조회되는 칼럼에 적용
    - 조회 시 오랜시간을 소모하는 컬럼에 적용
    - 데이터가 긴 경우 인덱스를 사용하지 않는다.

  2. 인덱스의 종류
    - primary : 중복되지 않은 유일한 키
    - normal : 중복을 허용하는 인덱스
    - unique : 중복을 허용하지 않는 유일한 키
    - foreign : 다른 테이블과의 관계성을 부여하는 키
  
  3. 예제
    1) primary key
    * 테이블 전체를 통틀어서 중복되지 않는 값을 지정해야 한다.
    * where 문을 이용해서 데이터를 조회할 때 가장 고속으로 데이터를 가져올 수 있다.
    * 테이블마다 딱 하나의 primary key를 가질 수 있다.
    - SELECT * FROM student WHERE id=3;

    2) unique key
    * 테이블 전체를 통틀어서 중복되지 않는 값을 지정해야 한다.
    * 고속으로 데이터를 가져올 수 있다.
    * 여러개의 unique key를 지정할 수 있다.
    - SELECT * FROM student WHERE number=0534543;

    3) normal key(=index key)
    * 중복을 허용한다.
    * primary, unique 보다 속도가 느리다.
    * 여러개의 키를 지정할 수 있다.
    - SELECT * FROM student WHERE department='국문과'

    4) Full Text
    * MySQL의 기본설정(ft_min_word_len)이 4로 되어 있기 때문에 최소 4글자 이상을 입력하거나 이 값을 조정해야 한다.
    * MySQL은 전문 검색 엔진이 아니기 때문에 한글 검색이 잘 안된다.
      (전문검색엔진 : lucene, sphinx)
    * 스토리지 엔진 중 myisam에서만 사용가능

    5) 중복키
    * 하나의 키에 여러개의 칼럼을 포함
    - SELECT * FROM student WHERE department='국문과' AND address="제주";


  <JOIN>
  1. 여러개의 테이블 사용하기
    - 데이터의 규모가 커지면서 하나의 테이블로 정보를 수용하기가 어려워지면 테이블을 분할하고 테이블 간의 관계성을 부여한다.
  2. 테이블간의 관계성에 따라서 복수의 테이블을 결합. 하나의 테이블인 것처럼 결과를 출력
  3. JOIN의 종류
    - OUTTER JOIN : 매칭되는 행이 없어도 결과를 가져오고 매칭되는 행이 없는 경우 NULL로 표시한다. (LEFT JOIN, RIGHT JOIN)
    - INNER JOIN : 조인하는 두 개의 테이블 모두에 데이터가 존재하는 행에 대해서만 결과를 가져온다.
  4. 예제
    1) LEFT JOIN (가장 많이 사용)
      - SELECT s.name, s.location_id, l.name AS address, l.distance  FROM student AS s LEFT JOIN location AS l ON s.location_id = l.id;
    2) INNER JOIN
      - SELECT s.name, s.location_id, l.name AS address, l.distance  FROM student AS s INNER JOIN location AS l ON s.location_id = l.id;
      
 -->