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