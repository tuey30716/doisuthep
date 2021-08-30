<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  function index() {
		$todo = [
				[
					'id' => 1,
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 'STeP',
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',

				],
				[
					'id' => 2,
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 'STeP',
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',
				],	
				[
					'id' => 3,
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 'STeP',
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',
				],
				[
					'id' => 4,
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 'Mocup',
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',
				],
			];
		return view('admin.index', compact('todo'));
	}

	public function listContent(Request $request)
	{
		$type_list = [
			'publicize' => 'ข่าวประชาสัมพันธ์',
			'context' => 'บทความ',
			'plant' => 'พืช',
			'animal' => 'สัตว์',
			'fungi' => 'จุลินทรีย์และฟังไจ',
			'land' => 'ธรณี',
			'culture' => 'ศิลปวัฒนธรรม',
			'learning' => 'งานส่งเสริมการเรียนรู้',
			'project' => 'งานกิจกรรมโครงการ',
			'online' => 'งานบริการออนไลน์',
		];
		$type = $request['type'];
		$type_text = isset($type_list[$type])? $type_list[$type] :'' ;
		if($request['type'] == 'vedio') {
			$todo = [];
		} else {
			$todo = [
				[
					'id' => $request['type'],
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 'STeP',
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',

				],
				[
					'id' => 2,
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 'STeP',
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',
				],	
				[
					'id' => 3,
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 'STeP',
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',
				],
				[
					'id' => 4,
					'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
					'title_en' => 	$type,
					'description_th' => 'Mocup',
					'description_en' => 'Mocup',
				],
			];
		}
		
		return view('admin.content', compact('todo', 'type', 'type_text'));
	}

	public function listProtuct(Request $request)
	{
		$type = $request['type'];
		
			$todo = [
				[
					'id' => 1,
					'price' => 200,
					'name' => 'สินค้า',
					'status' => 0
				],
				[
					'id' => 2,
					'price' => 200,
					'name' => 'สินค้า',
					'status' => 1
				],	
				[
					'id' => 3,
					'price' => 200,
					'name' => 'สินค้า',
					'status' => 1
				],
				[
					'id' => 4,
					'price' => 200,
					'name' => 'สินค้า',
					'status' => 0
				],
			];
		
		return view('admin.product', compact('todo', 'type'));
	}

	public function listVedio(Request $request)
	{
		$type = $request['type'];
		
			$todo = [
				[
					'id' => 1,
					'link' => '',
				],
				[
					'id' => 2,
					'link' => '',
				],	
				[
					'id' => 3,
					'link' => '',
				],
				[
					'id' => 4,
					'link' => '',
				],
			];
		
		return view('admin.vedio', compact('todo', 'type'));
	}
	
	public function listWork(Request $request)
	{
		$type = $request['type'];
		
		$todo = [
			[
				'id' => $request['type'],
				'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
				'title_en' => 'STeP',
				'description_th' => 'Mocup',
				'description_en' => 'Mocup',

			],
			[
				'id' => 2,
				'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
				'title_en' => 'STeP',
				'description_th' => 'Mocup',
				'description_en' => 'Mocup',
			],	
			[
				'id' => 3,
				'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
				'title_en' => 'STeP',
				'description_th' => 'Mocup',
				'description_en' => 'Mocup',
			],
			[
				'id' => 4,
				'title_th' => 'STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้',
				'title_en' => 	$type,
				'description_th' => 'Mocup',
				'description_en' => 'Mocup',
			],
		];
		return view('admin.work', compact('todo', 'type'));
	}


	public function viewContet(Request $request)
	{
		$todo = [
			[
				'id' => 1,
				'title' => 'Mocup',
				'description' => 'Mocup',
			],
			[
				'id' => 2,
				'title' => 'Mocup',
				'description' => 'Mocup',
			],	
			[
				'id' => 3,
				'title' => 'Mocup',
				'description' => 'Mocup',
			],
			[
				'id' => 4,
				'title' => 'Mocup',
				'description' => 'Mocup',
			],
		];
		return response()->json($todo);
	}

	// public function create()
	// {
	// 	return view('content.create');
	// }
}


