<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        @include('includes/css.meals')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="selected_place"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 meal-form">
                    <form id="meal-form">
                        <div class="form-group">
                            <label for="meal">Select a meal</label>
                            <select id="meal" class="form-control">
                                <option value="breakfast">Breakfast</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">Select a city</label>
                            <select id="city" class="form-control">
                                <option value="las colinas">Las Colinas</option>
                                <option value="dallas">Dallas</option>
                                <option value="addison">Addison</option>
                                <option value="irving">Irving</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="min-price">Select a min-price</label>
                            <select id="min-price" class="form-control">
                                <option value="0">$</option>
                                <option value="1">$$</option>
                                <option value="2">$$$</option>
                                <option value="3">$$$$</option>
                                <option value="4">$$$$$</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="max-price">Select a max-price</label>
                            <select id="max-price" class="form-control">
                                <option value="1">$$</option>
                                <option value="2">$$$</option>
                                <option value="3">$$$$</option>
                                <option value="4">$$$$$</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 text-center">
                    <canvas id="canvas" width="500" height="500"></canvas>
                    <div>
                        <input class="form-control btn btn-primary" type="button" value="Spin" style="float:left;" id='spin' />
                    </div>
                </div>
            </div>
        </div>
    </body>
    @include('includes/js.meals')
</html>