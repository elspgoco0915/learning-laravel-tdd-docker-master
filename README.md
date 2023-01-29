# [Learning TDD in Laravel](https://github.com/nunulk/learning-laravel-tdd-docker)
[Laravelでテスト駆動開発を学ぼう！](https://www.techpit.jp/courses/92/)の学習リポジトリ

```bash
docker exec -it learning-laravel-tdd-app-1 ash
docker-compose exec app ash
```

```bash
# 全体を実行する
php artisan test

# ユニットテストまたはフィーチャーテストのみを実行する
php artisan test --testsuite=Unit
php artisan test --testsuite=Feature

# 特定のテストクラスのみを実行する
php artisan test tests/Unit/ExampleTest.php

# 特定のメソッドのみを実行する
php artisan test tests/Unit/ExampleTest.php --filter=testBasicTest
```