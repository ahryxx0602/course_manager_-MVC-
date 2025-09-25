<?php

class UserController extends BaseController
{
              public function index()
              {
                            $user  = new User();
                            $users = $user->getAllUsers();

                            // render phần thân -> string
                            ob_start();
                            // GỢI Ý: đổi 'layouts/layouts-part/user' thành 'users/index' cho đúng ngữ nghĩa
                            $this->renderView('layouts/layouts-part/user', ['users' => $users]);
                            $content = ob_get_clean();

                            // render layout chính, nhét $content vào
                            $data = [
                                          'title'   => 'Danh sách người dùng',
                                          'content' => $content,
                            ];
                            $this->renderView('layouts/main-layout', $data);
              }
}
