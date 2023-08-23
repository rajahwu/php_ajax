# jQuery Ajax

```js
$.ajax({
    type: "GET",
    url: "script.php",
    async: true,
    data: {},
    dataType: "text",
    success: function(data) {
        $("#main").html(data);
    },
    error: function(jqXHR, textStatus, error) {}
});

$.get({
    url: "script.php",
    dataType: "text",
    success: function(data) {
        $("#main").html(data);
    }
})
```
