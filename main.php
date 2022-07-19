<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="./css/style-v1.css" rel="stylesheet" />

    <title>Каталог</title>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-2">
            <a href="/" class="logo"
              ><img
                src="https://energosf.ru/local/templates/str_template/images/custom/desktop_logo.svg"
                class="img-fluid"
            /></a>
          </div>
          <div class="col-3">
            <a href="/catalog/" class="btn btn-energosf-v1">Каталог</a>
          </div>
          <div class="col-7">
            <form method="get" action="/search/">
              <input
                type="text"
                class="form-control search-input"
                name="q"
                placeholder="Поиск по каталогу..."
              />
              <svg
                width="42"
                height="42"
                class="ico-search"
                viewBox="0 0 42 42"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M41.5005 39.0853L31.3018 28.8866C34.0795 25.4892 35.4452 21.1541 35.1164 16.778C34.7875 12.4019 32.7893 8.31961 29.5349 5.3755C26.2806 2.43139 22.0192 0.85072 17.6322 0.96043C13.2451 1.07014 9.06802 2.86184 5.96493 5.96493C2.86184 9.06802 1.07014 13.2451 0.96043 17.6322C0.85072 22.0192 2.43139 26.2806 5.3755 29.5349C8.31961 32.7893 12.4019 34.7875 16.778 35.1164C21.1541 35.4452 25.4892 34.0795 28.8866 31.3018L39.0853 41.5005C39.4112 41.7917 39.8362 41.9471 40.2731 41.9348C40.7099 41.9226 41.1255 41.7436 41.4345 41.4345C41.7436 41.1255 41.9226 40.7099 41.9348 40.2731C41.9471 39.8362 41.7917 39.4112 41.5005 39.0853ZM18.0857 31.7502C15.3813 31.7515 12.7372 30.9506 10.4881 29.4489C8.23893 27.9472 6.4857 25.8122 5.45018 23.3139C4.41467 20.8156 4.1434 18.0663 4.67069 15.4138C5.19798 12.7613 6.50014 10.3247 8.41244 8.41244C10.3247 6.50014 12.7613 5.19798 15.4138 4.67069C18.0663 4.1434 20.8156 4.41467 23.3139 5.45018C25.8122 6.4857 27.9472 8.23893 29.4489 10.4881C30.9506 12.7372 31.7515 15.3813 31.7502 18.0857C31.7451 21.7082 30.3038 25.1808 27.7423 27.7423C25.1808 30.3038 21.7082 31.7451 18.0857 31.7502Z"
                  fill="#5B5B5B"
                />
              </svg>
            </form>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container-fluid">
        <h1>Труба ПВХ, ПНД и аксессуары</h1>
        <p>Категории:</p>
        <div class="mb-default">
          <a href="#" class="btn btn-energosf-v3">Крепления для труб</a>
          <a href="#" class="btn btn-energosf-v3"
            >Повороты, соединители, муфты</a
          >
        </div>
        <p>
          <span class="tab tab-active">Тип монтажа</span>
          <span class="tab">Назначение</span>
        </p>
        <div class="mb-default">
          <a href="#" class="btn btn-energosf-v3">Накладные</a>
        </div>
        <div class="sort-view mb-default-x2">
          <div class="sort">
            Сортировка:
            <a href="#" class="btn btn-energosf-v1">По популярности</a>
          </div>
          <div class="view">
            <!--a href="#">
                    <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="90" height="90" rx="5" fill="#F5821F"/>
                        <rect x="18" y="25" width="54" height="17" rx="5" fill="white"/>
                        <rect x="18" y="48" width="54" height="17" rx="5" fill="white"/>
                    </svg>
                </a>
                <a href="#">
                    <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="1.5" width="87" height="87" rx="3.5" fill="white" stroke="#CDCECE" stroke-width="3"/>
                        <rect x="24" y="23" width="16" height="17" rx="5" fill="#3D464D"/>
                        <rect x="50" y="23" width="16" height="17" rx="5" fill="#3D464D"/>
                        <rect x="24" y="50" width="16" height="17" rx="5" fill="#3D464D"/>
                        <rect x="50" y="50" width="16" height="17" rx="5" fill="#3D464D"/>
                    </svg>
                </a-->
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <div class="filter">
              <h2>Фильтр</h2>
              <hr />
              <div class="filter-item">
                <div class="title-filter mb-default">Цена</div>
                <p>От</p>
                <div class="mb-default-x05">
                  <input class="form-control" placeholder="От 199" />
                </div>
                <p>До</p>
                <input class="form-control" placeholder="До 19 934" />
              </div>
              <hr />
              <div class="filter-item">
                <div class="title-filter mb-default">Бренд</div>
                <div class="filter-checkbox-list">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault1"
                    />
                    <label class="form-check-label" for="flexCheckDefault1">
                      DKS
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault2"
                    />
                    <label class="form-check-label" for="flexCheckDefault2">
                      EKF
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault3"
                    />
                    <label class="form-check-label" for="flexCheckDefault3">
                      IEK
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault4"
                    />
                    <label class="form-check-label" for="flexCheckDefault4">
                      Майер
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault5"
                    />
                    <label class="form-check-label" for="flexCheckDefault5">
                      Промрукав
                    </label>
                  </div>
                </div>
              </div>
              <hr />
              <div class="filter-item">
                <div class="title-filter mb-default">Цвет</div>
                <div class="filter-checkbox-list">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault11"
                    />
                    <label class="form-check-label" for="flexCheckDefault11">
                      Белый
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault22"
                    />
                    <label class="form-check-label" for="flexCheckDefault22">
                      Синий
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault33"
                    />
                    <label class="form-check-label" for="flexCheckDefault33">
                      Зеленый
                    </label>
                  </div>
                </div>
              </div>
              <hr />
              <button class="btn btn-block btn-energosf-v1 mb-default-x05">
                Применить
              </button>
              <button class="btn btn-block btn-energosf-v3">Отменить</button>
            </div>
          </div>
          <div class="col-8">
            <div class="catalog-items-list">
              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>

              <div class="catalog-item mb-default-x2">
                <div class="row">
                  <div class="col-2">
                    <a href="#"
                      ><img src="./img/img1.png" class="img-fluid"
                    /></a>
                  </div>
                  <div class="col-10 mb-default">
                    <div class="b-l1">
                      <div class="success">В наличии</div>
                      <div class="price">23.00 ₽/шт</div>
                    </div>
                    <a href="#" class="catalog-item--name"
                      >Хомутный держатель со стяжкой CFF2 32-63 мм серый IEK</a
                    >
                  </div>
                  <div class="col-12">
                    <div class="row mb-default">
                      <div class="col-6">
                        <div class="input-group">
                          <span class="input-group-text">-</span>
                          <input
                            type="number"
                            min="1"
                            value="1"
                            class="form-control"
                          />
                          <span class="input-group-text">+</span>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-energosf-v1 btn-block">
                          <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6666 17.5L11.6666 11.6667C11.6666 8.44501 14.2783 5.83334 17.5 5.83334V5.83334C20.7216 5.83334 23.3333 8.44501 23.3333 11.6667L23.3333 17.5"
                              stroke="white"
                              stroke-width="3"
                              stroke-linecap="round"
                            />
                            <path
                              d="M5.52768 16.7928C5.67276 15.0519 5.74529 14.1815 6.31938 13.6532C6.89347 13.125 7.76693 13.125 9.51386 13.125H25.4861C27.2331 13.125 28.1065 13.125 28.6806 13.6532C29.2547 14.1815 29.3272 15.0519 29.4723 16.7928L30.4445 28.4589C30.529 29.4724 30.5712 29.9792 30.2741 30.3021C29.977 30.625 29.4685 30.625 28.4514 30.625H6.5486C5.53155 30.625 5.02302 30.625 4.72592 30.3021C4.42882 29.9792 4.47105 29.4724 4.55551 28.4589L5.52768 16.7928Z"
                              stroke="white"
                              stroke-width="3"
                            />
                          </svg>
                          В корзину
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-energosf-v4 btn-block btn-detail">
                  Подробнее
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <a href="#" class="btn btn-energosf-v2">
              <svg
                width="28"
                height="52"
                viewBox="0 0 28 52"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5.5 26L2.44388 23.4193L0.264603 26L2.44388 28.5807L5.5 26ZM21.4439 0.919277L2.44388 23.4193L8.55612 28.5807L27.5561 6.08072L21.4439 0.919277ZM2.44388 28.5807L21.4439 51.0807L27.5561 45.9193L8.55612 23.4193L2.44388 28.5807Z"
                  fill="white"
                />
              </svg>

              Назад
            </a>
          </div>
          <div class="col-6 text-center">
            <a href="#" class="basket">
              <svg
                width="102"
                height="103"
                viewBox="0 0 102 103"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_113_271)">
                  <path
                    d="M88.8188 18.54H54.901C53.5397 18.54 52.2341 19.0826 51.2715 20.0484C50.3089 21.0142 49.7681 22.3242 49.7681 23.69C49.7681 25.0559 50.3089 26.3658 51.2715 27.3316C52.2341 28.2974 53.5397 28.84 54.901 28.84H88.8188C89.2446 28.8363 89.666 28.9268 90.0529 29.1052C90.4398 29.2835 90.7827 29.5453 91.0572 29.8719C91.3317 30.1985 91.531 30.5818 91.641 30.9945C91.7509 31.4072 91.7688 31.8392 91.6932 32.2596L83.9118 69.6898C83.7957 70.3647 83.4456 70.9766 82.9234 71.4176C82.4012 71.8586 81.7405 72.1003 81.058 72.1H47.7971C47.1146 72.1003 46.4539 71.8586 45.9317 71.4176C45.4095 70.9766 45.0594 70.3647 44.9432 69.6898L33.5894 4.12002C33.3606 2.95667 32.7357 1.90939 31.8217 1.15769C30.9077 0.406003 29.7615 -0.00327606 28.5797 1.97507e-05H5.13286C4.35072 0.00061613 3.57906 0.180545 2.87681 0.526065C2.17456 0.871585 1.5603 1.37356 1.08093 1.99364C0.601569 2.61373 0.269782 3.33554 0.110911 4.10393C-0.0479606 4.87232 -0.0297141 5.66698 0.164257 6.42722C0.476241 7.56514 1.15964 8.56518 2.1051 9.26731C3.05056 9.96944 4.20343 10.3331 5.37923 10.3H24.3913L34.9034 71.4408C35.4325 74.4937 37.0132 77.2633 39.3697 79.2662C41.7262 81.2691 44.7088 82.3783 47.7971 82.4H81.058C84.1604 82.3976 87.1626 81.2972 89.5361 79.2926C91.9096 77.288 93.5023 74.5076 94.0338 71.4408L101.815 33.99C102.138 32.0921 102.044 30.1464 101.54 28.2888C101.035 26.4312 100.133 24.7065 98.8949 23.2352C97.6573 21.7639 96.1143 20.5814 94.374 19.7705C92.6336 18.9595 90.7377 18.5396 88.8188 18.54Z"
                    fill="#F5821F"
                  />
                  <path
                    d="M74.6932 47.3801C76.0545 47.3801 77.3601 46.8375 78.3227 45.8717C79.2853 44.9059 79.8261 43.5959 79.8261 42.2301C79.8261 40.8642 79.2853 39.5543 78.3227 38.5885C77.3601 37.6227 76.0545 37.0801 74.6932 37.0801H58.2681C56.9068 37.0801 55.6012 37.6227 54.6386 38.5885C53.676 39.5543 53.1353 40.8642 53.1353 42.2301C53.1353 43.5959 53.676 44.9059 54.6386 45.8717C55.6012 46.8375 56.9068 47.3801 58.2681 47.3801H74.6932Z"
                    fill="white"
                  />
                  <path
                    d="M50.0556 102.999C54.0243 102.999 57.2416 99.7711 57.2416 95.7891C57.2416 91.8071 54.0243 88.5791 50.0556 88.5791C46.0869 88.5791 42.8696 91.8071 42.8696 95.7891C42.8696 99.7711 46.0869 102.999 50.0556 102.999Z"
                    fill="black"
                  />
                  <path
                    d="M78.7998 102.999C82.7685 102.999 85.9857 99.7711 85.9857 95.7891C85.9857 91.8071 82.7685 88.5791 78.7998 88.5791C74.831 88.5791 71.6138 91.8071 71.6138 95.7891C71.6138 99.7711 74.831 102.999 78.7998 102.999Z"
                    fill="black"
                  />
                  <path
                    d="M75.7199 58.7096C75.7199 57.3437 75.1791 56.0338 74.2165 55.068C73.2539 54.1022 71.9483 53.5596 70.587 53.5596H60.3213C58.96 53.5596 57.6544 54.1022 56.6919 55.068C55.7293 56.0338 55.1885 57.3437 55.1885 58.7096C55.1885 60.0754 55.7293 61.3854 56.6919 62.3512C57.6544 63.317 58.96 63.8596 60.3213 63.8596H70.587C71.9483 63.8596 73.2539 63.317 74.2165 62.3512C75.1791 61.3854 75.7199 60.0754 75.7199 58.7096Z"
                    fill="black"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_113_271">
                    <rect width="102" height="103" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <span>
                <span>12 позиций</span>
                <br />
                <span>12 643 ₽</span>
              </span>
            </a>
          </div>
          <div class="col-3 text-end">
            <a href="#" class="btn btn-energosf-v2">
              <svg
                width="39"
                height="44"
                viewBox="0 0 39 44"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2.875 21.3037C2.875 18.079 2.875 16.4667 3.52685 15.0494C4.17869 13.6322 5.40287 12.5829 7.85122 10.4843L10.2262 8.44856C14.6516 4.65538 16.8643 2.75879 19.5 2.75879C22.1357 2.75879 24.3484 4.65538 28.7738 8.44856L31.1488 10.4843C33.5971 12.5829 34.8213 13.6322 35.4732 15.0494C36.125 16.4667 36.125 18.079 36.125 21.3037V31.3746C36.125 35.853 36.125 38.0921 34.7338 39.4834C33.3425 40.8746 31.1033 40.8746 26.625 40.8746H12.375C7.89666 40.8746 5.65749 40.8746 4.26624 39.4834C2.875 38.0921 2.875 35.853 2.875 31.3746V21.3037Z"
                  stroke="white"
                  stroke-width="5"
                />
                <path
                  d="M25.4375 40.875V27.625C25.4375 27.0727 24.9898 26.625 24.4375 26.625H14.5625C14.0102 26.625 13.5625 27.0727 13.5625 27.625V40.875"
                  stroke="white"
                  stroke-width="5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>

              Выход
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
