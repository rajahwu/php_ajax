# Detect Ajax Request

```js
    xhr.setRequestHeader('X-Request-With', 'XMLHttpResquest');
```

```php
function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(is_ajax_request()) {
    echo "Ajax response";
} else {
    echo "Non-Ajax response";
}
```
