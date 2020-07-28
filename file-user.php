<?php include("includes/admin_header.php"); ?>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">ФАЙЛ</a>
                    </div>
                    {% if msg %}
                    <small class="message">
                            {{ msg.1 }}
                        </small> {% endif %}
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                </div>
            </nav>
            <div class="content">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Файлын хүснэгт</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Нэр
                                        </th>
                                        <th>
                                            Огноо
                                        </th>
                                        <th>
                                            Ангилал
                                        </th>
                                        <th>Файл</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        {% for file in files %}
                                        <tr>
                                            <td>
                                                <span class="completed">{{ file.id }}</span>
                                            </td>
                                            <td>
                                                <span class="completed">{{ file.name }}</span>
                                            </td>
                                            <td>
                                                <span class="completed">{{ file.date }}</span>
                                            </td>
                                            <td>
                                                <span class="completed">{{ file.category }}</span>
                                            </td>
                                            <td class="text-primary">
                                                <iframe controls="true" id="iFrame1" scrolling="no" &autoplay=false src="file/{{ file.file }}" frameborder="0" height="80" width="50%"></iframe>
                                            </td>
                                            <td class="text-primary">
                                                <form class="inline" action="/user_add_file/{{file.id}}" method="post">
                                                    <input type="hidden" name="_method" value="delete" />
                                                    <button class="btn btn-primary pull-right" input type="submit">Устгах</button>
                                                </form>
                                            </td>
                                        </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Файл нэмэх</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/user_add_file" method="post" class="form">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Файлын нэр</label>
                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Огноо</label>
                                                    <div class="form-group">

                                                        <input type="date" value="2020-05-21" name="date" id="date">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Ангилал</label>
                                                    <div class="form-group">
                                                        <div class="custom-select" style="width: 200px;">
                                                            <select name="category" id="category">
                                                                    <option value="БИЧВЭР">БИЧВЭР</option>
                                                                    <option value="ЗУРАГ">ЗУРАГ</option>
                                                                    <option value="ДУУ">ДУУ</option>
                                                                    <option value="ВИДЕО">ВИДЕО</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-100">
                                                <label class="bmd-label-floating-2">Файл сонгох</label>
                                                <div class="f">
                                                    <div class="file-upload">
                                                        <div class="file-select">
                                                            <div class="file-select-button" id="fileName">ОРУУЛАХ</div>
                                                            <div class="file-select-name" id="noFile"></div>
                                                            <input type="file" name="file" id="file" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary pull-right" input type="submit">Хадгалах</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            <!-- Start Footer Area -->
                            <?php include("includes/admin_footer.php"); ?>