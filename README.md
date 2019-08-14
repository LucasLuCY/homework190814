# homework190814
# 題目
公告訊息管理系統
- 網站首頁條列公告訊息標題
- 使用者點擊標題後，顯示公告訊息的詳細內容
- 網管人員登入後，可增修公告訊息內容

額外內容:
- 程式資安議題
- 實作公告訊息訂閱/推播功能

#實作項目
環境
1. 利用Laravel框架建立專案
2. 使用Migration建立資料表
3. 利用Resource建置Restful方式路由
4. 採用master.blade分離前端重複資訊

MYSQL
1. Table: billboard          留言板主要內容 
2. Table: users              會員資料表
3. Table: password_resets    密碼重置表
4. Table: migrations         資料遷移資料

前端留言板顯示頁面
1. 撰寫CSS樣式與調整
2. 點擊彈出留言詳細內容
3. 轉跳登入頁面

登入頁面
1. 使用Laravel AUTH 建立登入系統
2. 新增或驗證成功後導入後台管理系統

後臺管理系統
1. 條列留言項目
2. 在每個項目加入修改/刪除功能
3. 標頭添加新增按鈕
4. 頁首增加回首頁以及登出選項