<script>
  // ajax 문법
  $.ajax({
    url: "", // 요청 url
    type: "", // 데이터 전송방식. GET 또는 POST
    cache: , // 요청 페이지의 캐시 여부. false 또는 true
    dataType: "", // 서버에서 받아올 데이터를 어떤 형태로 해석할 것인지. xml, json, html, script
    data: "", // 서버로 데이터를 전송할 때 사용.
    success: function(data){ // ajax 통신에 성공했을 때 실행되는 이벤트

    },
    error: function(request, status, error){ // ajax 통신에 실행했을 때 실행되는 이벤트.

    }
  });
</script>