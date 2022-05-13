<!-- 
  <PHP DB관련 코드 정리>
    1. mysqli_query() : 다른 형식의 SQL 구문, INSERT, UPDATE, DELETE, DROP 등에서 성공하면 TRUE, 실패하면 FALSE 반환
      - return values : 실패했을 때 false 반환, 읽기와 관련된 sql을 실행했을 땐 mysqli_result를 반환

    2. mysqli_connect() : php에서 MySQL을 연결해주는 함수
      - mysqli_connect("example.com", "user", "password", "database");

    3. mysqli_close() : mysqli_connect 함수를 통해 연결한 객체의 연결을 해제하는데 사용하는 함수
    4. mysqli_fetch_assoc : mysqli_query 를 통해 얻은 result set에서 레코드를 1개씩 리턴해주는 함수
      * 레코드를 1개씩 리턴해주는 것은 mysqli_fetch_row와 동일하지만 mysqli_fetch_assoc 함수가 리턴하는 값은
      연관배열이라는 점이 틀리다. 연관배열이기 때문에 인덱스 번호가 아닌 아이디값으로 값을 불러올 수 있다.
      즉, 필드명이나 쿼리문에 사용된 alias로 배열을 참조할 수 있다.
      
      + mysqli_fetch_row() : 값을 꺼내오는데 [index] 숫자값을 사용한다.
      + mysqli_fetch_array() : assoc와 row를 합쳐논 것. 인덱스번호, 별칭으로 둘다 값을 찾는데 이용 가능하지만 느리고 비효율적 (안씀)
    
    5. array_push() : 배열의 끝에 하나 이상의 요소를 삽입
    6. require_once() : 해당 파일 불러옴(모듈화)
    7. json_encode() : json 형식으로 인코딩
 -->