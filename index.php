<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Leadership ReflectionⓇ Note</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: "Hiragino Kaku Gothic ProN", sans-serif;
      background-color: #f0f9f8;
      margin: 0;
      padding: 1rem;
      color: #333;
    }
.logo-center {
  text-align: center;
  margin-top: 50px;
}

.logo-center img {
  height: 200px; /* 必要に応じてサイズ調整 */
}

    .container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 150, 136, 0.2);
    }

    h1 {
      text-align: center;
      color: #00796b;
      font-size: 1.8rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #009688;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
    }

    button:hover {
      background-color: #00796b;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Leadership Reflection Note</h1>

    <form action="insert.php" method="POST">
      <label>日付:
        <input type="date" name="log_date" required>
      </label>

      <label>タイトル:
        <input type="text" name="title" required>
      </label>

      <label>ふりかえり内容:
        <textarea name="reflection" rows="4" required></textarea>
      </label>

      <label>🔥活力レベル（0〜10）:
         <input type="number" name="energy_level" min="0" max="10" required>
      </label>

      <label>🌱信頼レベル（0〜10）:
         <input type="number" name="trust_level" min="0" max="10" required>
      </label>

      <label>気持ち（任意）:
        <input type="text" name="emotion">
      </label>
    
      <label>学び（任意）:
        <textarea name="learning" rows="3"></textarea>
      </label>

      <label>次の行動（任意）:
        <textarea name="next_action" rows="3"></textarea>
      </label>

      <button type="submit">記録する</button>
    </form>
  </div>
  <div style="text-align: center; margin-top: 2rem;">
  <a href="view.php" style="
    background-color: #ff7043;
    color: white;
    padding: 12px 24px;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    display: inline-block;
    transition: background-color 0.3s ease;
  " onmouseover="this.style.backgroundColor='#f4511e'" onmouseout="this.style.backgroundColor='#ff7043'">
    📖 過去の記録を見る
  </a>
</div>
</body>
</html>