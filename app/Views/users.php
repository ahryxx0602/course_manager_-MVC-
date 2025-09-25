<!DOCTYPE html>
<html lang="en">

<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Document</title>
</head>

<body>
              <table>
                            <thead>
                                          <tr>
                                                        <th>STT</th>
                                                        <th>Họ tên</th>
                                                        <th>Email</th>
                                                        <th>Ngày tạo</th>
                                          </tr>
                            </thead>
                            <tbody>
                                          <?php $dem = 1;
                                          foreach ($data as $item): ?>
                                                        <tr>
                                                                      <td>
                                                                                    <?php echo $dem;
                                                                                    $dem++; ?>
                                                                      </td>
                                                                      <td>
                                                                                    <?php echo $item['fullName']; ?>
                                                                      </td>
                                                                      <td>
                                                                                    <?php echo $item['email']; ?>
                                                                      </td>
                                                        </tr>
                                          <?php endforeach; ?>
                            </tbody>
              </table>
</body>

</html>