# Laravel 9 具象狀態傳輸應用程式介面驗證碼

引入 mews 的 captcha 套件來擴增實作人機驗證，確保只有擁有正確密碼的真人可以存取帳戶，藉此杜絕從遠端以數位方式登入的行為。這項機制的運作原理在於，電腦可以建立扭曲的圖片及處理回應，但無法以真人思維方式閱讀或解決這類問題，因此無法通過人機驗證測驗。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/api/v1/captcha` GET 動作來進行驗證碼產生。
- 你可以經由 `/api/v1/captcha` POST 動作來進行驗證碼驗證。

----

## 畫面截圖
![](https://i.imgur.com/8j6s36s.png)
> 產生新的人機驗證圖片

![](https://i.imgur.com/yzPuCFi.png)
> 提供正確的圖片驗證碼及公鑰則可通過人機驗證測驗