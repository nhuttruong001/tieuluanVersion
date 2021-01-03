// bang comment luu binh luan
Schema::create('comments', function (Blueprint $table) {
            $table->increments('cmt_id');
            $table->string('cmt_content', 255);
            $table->tinyInteger('cmt_status')->default(0);
            $table->string('name_customer', 50)->nullable();
            $table->string('email_customer', 100)->nullable();
            $table->string('cmt_ip', 24)->nullable();
            $table->timestamp('cmt_created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('cmt_updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('customer_id')->nullable();
            
            $table->foreign('product_id')->references('product_id')
                ->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customer_id')->references('id')
                ->on('customers')->onDelete('cascade')->onUpdate('cascade');

        });

        //tai binh luan bang ajax

        public function loadComment(Request $request){
        if($request->ajax()){
            $comments = DB::table('comments')->where('product_id', $request->product_id)->get();      
            $output = "";
            $name = "";
            $image = "customer.png";                
            foreach($comments as $key => $comment){          
                $name = ($comment->name_customer === null) ? Customer::find($comment->customer_id)->name :  $comment->name_customer; 
                $image = ($comment->name_customer === null) ? Customer::find($comment->customer_id)->avatar :  "customer.png";    
                $output .= '
                <div class="comment">
                    <img src="storage/images/avatars/'.$image.'" alt="admin-avatar" class="img img-responsive img-thumbnail">
                    <p style="color: blue;"><i class="fa fa-user"></i> '.$name.'</p>
                    <p>'.$comment->cmt_content.'</p>
                    <span class="time-right">'.$comment->cmt_created_at.'</span>
                </div> ';
            }
            return $output;
        }
    }


    //them binh luan

    public function addComment(Request $request){

if($request->rating == 0){
    return response()->json([
        'type' => 'error',
        'message' => 'You must rating'
    ]); 
}

$timeNow = Carbon::now('Asia/Ho_Chi_Minh'); 
$timeComment = DB::table('comments')->where('cmt_ip', $request->ip())->orderBy('cmt_created_at','desc')->first();
if($timeComment){
    $timeOut= (strtotime($timeNow) - strtotime($timeComment->cmt_created_at))/(60);
    if($timeOut < 5){
        return response()->json([
            'type' => 'error',
            'message' => 'Comments only after 5 minutes!'
        ]);
    }
}


if($request->ajax() && $request->comment != null){

    $dataComment['product_id'] = $request->product_id;
    $dataComment['cmt_content'] = $request->comment;
    $dataComment['cmt_ip'] = $request->ip();

    $dataRating['product_id'] = $request->product_id;         
    $dataRating['rating_star'] = $request->rating;

    if(Auth::guard('customer')->check()){
        $dataComment['customer_id'] = Auth::guard('customer')->user()->id;
        $dataComment['name_customer'] = $request->name;
        $dataComment['email_customer'] = $request->email;
        $dataComment['cmt_ip'] = $request->ip();

        $dataRating['customer_id'] = Auth::guard('customer')->user()->id;
        $dataRating['name_customer'] = $request->name;
        $dataRating['email_customer'] = $request->email;     
    }else{
        $dataComment['customer_id'] = null;
        $dataComment['name_customer'] = $request->name;
        $dataComment['email_customer'] = $request->email;

        $dataComment['customer_id'] = null;
        $dataComment['name_customer'] = $request->name;
        $dataComment['email_customer'] = $request->email;
    }

    DB::table('comments')->insert($dataComment);
    DB::table('rating')->insert($dataRating);

    return response()->json([
        'type' => 'success',
        'message' => 'Add Comment successfuly!'
    ]);
}

return response()->json([
    'type' => 'error',
    'message' => 'Invalid comment!'
]);      
}