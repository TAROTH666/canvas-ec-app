@extends('layouts.app')

@section('content')

<main>
	<div class="container">
		<div class="mx-auto">
			<h3 class="text-center">商品検索画面</h3>
			<!--検索フォーム-->
			<div class="row">
				<div class="col-sm">
					<form method="GET" action="{{ route('searchproduct')}}">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">商品名</label>
							<!--入力-->
							<div class="col-sm-5">
								<input type="text" class="form-control" name="searchWord" value="{{ $searchWord }}">
							</div>
							<div class="col-sm-auto">
								<button type="submit" class="btn btn-primary ">検索</button>
							</div>
						</div>
						<!--プルダウンカテゴリ選択-->
						<div class="form-group row">
							<label class="col-sm-2">商品カテゴリ</label>
							<div class="col-sm-3">
								<select id="categoryId" name="categoryId" class="form-control" value="{{ $categoryId }}">
									<option value="">未選択</option>

									@foreach($categories as $id => $category_name)
									<option value="{{ $id }}">
										{{ $category_name }}
									</option>
									@endforeach
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--検索結果テーブル 検索された時のみ表示する-->
		@if (!empty($products))
		<div class="productTable">
			<p>全{{ $products->count() }}件</p>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="width:50%">商品名</th>
						<th>商品カテゴリ</th>
						<th>価格</th>
					</tr>
				</thead>
				@foreach($products as $product)
				<tr>
					<td><a href=" {{ url('iteminfo',['id' => $product->id ]) }} ">{{ $product->product_name }}</a></td>
					<td>{{ $product->category->category_name }}</td>
					<td>{{ $product->price }}円</td>
				</tr>
				@endforeach
			</table>
		</div>
		<!--テーブルここまで-->
		<!--ページネーション-->
		<div class="d-flex justify-content-center">
			{{-- appendsでカテゴリを選択したまま遷移 --}}
			{{ $products->appends(request()->input())->links() }}
		</div>
		@endif
		<!--ページネーションここまで-->
	</div>
</main>

@endsection