
> ここにクローン・プッシュしないでください。必ず自分のアカウントにフォークしてから作業してください。

<h1>初回のみやること</h1>

このリポジトリ(徳永のアカウントにあるリポジトリ)を自身のアカウントにフォークして課題を進めること。

<h2>フォーク手順</h2>

1. https://github.com/daichi-tokunaga/PHP-Study/fork にアクセス

1. Ownerが自分のアカウント、Repository nameがPHP-Studyになっていることを確認

1. 画面下のCreate fork(緑のボタン)を押下

1. 自身のアカウントにコピーされるので以降、そこに作ったものをpushしていく

## ファイルの実行方法

ターミナルで以下のコマンドを実行します。

```bash
php ファイル名.php
```

例: sample1.php を実行する場合

```bash
cd sample
php sample1.php
```

## 課題の進め方

### 1. まずサンプルを読む

`sample/` フォルダにお手本のコードがあります。上から順番に読んで実行してみてください。

| ファイル | 内容 |
|---|---|
| `sample1.php` | 変数・四則演算・条件分岐・論理演算子 |
| `sample2.php` | for文・配列・foreach |
| `sample3.php` | 関数（引数・戻り値） |
| `sample4.php` | 型宣言・strict_types |
| `class/Main.php` | クラスの使い方 |

`study.php` は自由に書いて試せるファイルです。

### 2. 課題に取り組む

`works/` フォルダの課題に取り組みます。各ファイルの `// TODO` や空の関数部分にコードを書いてください。

#### work1（条件分岐）

`works/work1/q1.php` 〜 `q10.php`

if / else / elseif を使った基本問題です。

```bash
cd works/work1
php q1.php
```

#### work2（ループ・配列）

`works/work2/q1.php` 〜 `q8.php`

for文・foreach・配列操作の問題です。

```bash
cd works/work2
php q1.php
```

#### work3（関数）

`works/work3/q1.php` 〜 `q3.php`

関数を作る問題です。テストコードが埋め込まれているので、実行すると正解かどうか確認できます。

```bash
cd works/work3
php q1.php
# テスト1:OK
# テスト2:OK
# テスト3:OK  ← 全てOKになれば正解
```

#### work4（型宣言）

`works/work4/q1.php` 〜 `q5.php`

関数の引数・戻り値に型を付ける問題です。`declare(strict_types=1)` の挙動も学びます。

```bash
cd works/work4
php q1.php
```

#### work5（クラス基礎）

`works/work5/`

型宣言付きのUserクラスを拡張する問題です。`問題.md` を読んでから取り組んでください。

```bash
cd works/work5
cat 問題.md    # 問題文を確認
php main.php   # 実行して動作確認
```

#### workEx1（クラス応用）

`works/workEx1/`

Gunクラスを完成させる応用問題です。問題は全4問あり、段階的に機能を追加していきます。

```bash
cd works/workEx1
cat 問題.md
php Main.php
```

#### workEx2（総合問題）

`works/workEx2/`

生徒の成績管理をテーマにした総合問題です。条件分岐・ループ・関数の知識を組み合わせて解きます。

```bash
cd works/workEx2
cat 問題.md
php main.php
```

## 困ったときは

- エラーが出たらメッセージをよく読む（行番号が書いてあります）
- `echo` や `print_r` で変数の中身を確認する
- サンプルコードに戻って書き方を確認する
