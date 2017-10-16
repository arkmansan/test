<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index() {
        return "[
    {\"id\":\"super\",\"department\":null,\"level\":0,\"order\":0,\"name\":\"超级管理员\",\"parentid\":null},
    {\"id\":\"2108eacb802b4eada17484d27ffde141\",\"department\":\"001\",\"level\":1,\"order\":0,\"name\":\"办公室\",\"parentid\":\"super\"},
    {\"id\":\"8e07c709614949de994d29a4b0405c56\",\"department\":\"001\",\"level\":2,\"order\":0,\"name\":\"主任\",\"parentid\":\"2108eacb802b4eada17484d27ffde141\"},
    {\"id\":\"f04485bf240b48668d2d3e70a6009643\",\"department\":\"001\",\"level\":2,\"order\":1,\"name\":\"员工\",\"parentid\":\"2108eacb802b4eada17484d27ffde141\"},
    {\"id\":\"62f98e309b94477185dd10712026c220\",\"department\":\"002\",\"level\":1,\"order\":1,\"name\":\"财务部\",\"parentid\":\"super\"},
    {\"id\":\"3fbfd386e84a4967b6b77a5c263e95b1\",\"department\":\"002\",\"level\":2,\"order\":0,\"name\":\"总监\",\"parentid\":\"62f98e309b94477185dd10712026c220\"},
    {\"id\":\"cb28621babaa4b1db49a728fc62cb8da\",\"department\":\"002\",\"level\":2,\"order\":1,\"name\":\"会计\",\"parentid\":\"62f98e309b94477185dd10712026c220\"},
    {\"id\":\"0ea45e81f92f47d4911c439f075696af\",\"department\":\"002\",\"level\":2,\"order\":2,\"name\":\"审计\",\"parentid\":\"62f98e309b94477185dd10712026c220\"},
    {\"id\":\"a7d54f75e662466aa26582974e1935f1\",\"department\":\"002\",\"level\":2,\"order\":3,\"name\":\"出纳\",\"parentid\":\"62f98e309b94477185dd10712026c220\"},
    {\"id\":\"9d6c1cd843dd44368a9b6533ef4bd92c\",\"department\":\"003\",\"level\":1,\"order\":2,\"name\":\"人事部\",\"parentid\":\"super\"},
    {\"id\":\"a850ee495afa4190b802d730b50538e6\",\"department\":\"003\",\"level\":2,\"order\":5,\"name\":\"主管\",\"parentid\":\"9d6c1cd843dd44368a9b6533ef4bd92c\"},
    {\"id\":\"8ee5ffa805e64f70beecd6907a9e172e\",\"department\":\"003\",\"level\":2,\"order\":6,\"name\":\"人事专员\",\"parentid\":\"9d6c1cd843dd44368a9b6533ef4bd92c\"},
    {\"id\":\"2c1fa2f07219471ea7b2338c65b2f42a\",\"department\":\"004\",\"level\":1,\"order\":3,\"name\":\"采购部\",\"parentid\":\"super\"},
    {\"id\":\"3f3c254279c244978e21f2f75e17d96b\",\"department\":\"004\",\"level\":2,\"order\":8,\"name\":\"采购员\",\"parentid\":\"2c1fa2f07219471ea7b2338c65b2f42a\"},
    {\"id\":\"7234b04779d947f89d8fd67e5595051d\",\"department\":\"005\",\"level\":1,\"order\":4,\"name\":\"市场部\",\"parentid\":\"super\"},
    {\"id\":\"0d479de9068d4f0d9f17209bd50156c0\",\"department\":\"005\",\"level\":2,\"order\":0,\"name\":\"华北市场\",\"parentid\":\"7234b04779d947f89d8fd67e5595051d\"},
    {\"id\":\"a8a93a771b0940029f29f9bc1b68777f\",\"department\":\"005\",\"level\":3,\"order\":0,\"name\":\"华北市场主管\",\"parentid\":\"0d479de9068d4f0d9f17209bd50156c0\"},
    {\"id\":\"4766711ea86949779041fe27c9469eff\",\"department\":\"005\",\"level\":2,\"order\":1,\"name\":\"华东市场\",\"parentid\":\"7234b04779d947f89d8fd67e5595051d\"},
    {\"id\":\"2d7acd5997a24bc0a0492f072175b8a4\",\"department\":\"005\",\"level\":3,\"order\":0,\"name\":\"华东市场主管\",\"parentid\":\"4766711ea86949779041fe27c9469eff\"}
]";
    }
    public function edit(request$request) {
        $json= json_decode($request->input('json'),true);
        foreach ($json[0] as $k => $value) {
            return ;
        }
        return $json[0]['id'];
    }
}
