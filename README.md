## Timmy-Blog

## 🚀 Используемые технологии

| Категория        | Технологии                                                                 |
|------------------|----------------------------------------------------------------------------|
| Фреймворки       | Laravel, Vue.js, Vite,                                            |
| Бэкенд           | REST API, Validation,                                 |
| Фронтенд         | Pinia, Vue Router, Composition API, Tailwind CSS                           |
| Базы данных      | MySQL                                                 |
| AJAX / HTTP      | Axios                                                 |

## ✨ Фичи

- ✅ **CRUD для категории и тегов** — создание, редактирование, удаление и просмотр
- ✅ **Загрузка изображений** — поддержка превью и обработка файлов

## 📘 API Эндпоинты

| Метод | URL          | Описание                    |
|-------|--------------|-----------------------------|
| GET   | /api/v1/posts       | Получить список постов      |
| GET   | /api/v1/posts/:id   | Получить пост по ID         |
| POST  | /api/v1/posts       | Создать новый пост          |
| GET   | /api/v1/categories  | Получить список категорий   |
| GET   | /api/v1/tags        | Получить список тегов       |

## 🔄 Действия (Actions)
```js
async getPosts() {
  try {
    const res = await axios.get("/api/v1/posts")
    this.posts = res.data.data
  } catch (error) {
    console.log('Не удалось загрузить посты', error)
  }
}
```
